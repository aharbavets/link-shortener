<template>
  <div class="container center-vertically" id="container">

    <div class="content">
      <h1 class="display-4">Link Shortener</h1>

      <form v-if="!shortened" @submit.stop.prevent="shorten">
        <div class="form-group" >
          <label for="original_link">Enter your long link here</label>
          <div class="input-group mb-3">
            <input
                required
                type="url"
                class="form-control"
                v-model="originalLink"
                id="original_link"
                aria-describedby="original_link" placeholder="Your link"
                :disabled="processing"
            />
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary" :disabled="processing">Shorten</button>
            </div>
          </div>
        </div>
      </form>

      <div v-if="shortened">
        <div class="alert alert-success" role="alert">
          Your link has been shortened:
        </div>

        <div class="input-group mb-3">
          <input readonly type="url" class="form-control" aria-describedby="original_link" v-model="shortLink">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary" @click="copyToClipboard">Copy</button>
          </div>
        </div>

        <button type="button" class="btn btn-light" @click="shortenAgain">Shorten another link</button>
      </div>
    </div>

  </div>
</template>

<script>
import copy from "copy-to-clipboard";

export default {
  name: 'LinkShortener',
  props: {
  },
  data() {
    return {
      shortened: false,
      processing: false,
      originalLink: '',
      shortLink: '',
    }
  },
  methods: {
    copyToClipboard() {
      copy(this.shortLink)
    },

    async shorten() {
      if (this.processing) {
        return
      }

      this.processing = true

      let response;

      try {
        response = await fetch('//localhost:8000/api/link/shorten', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          mode: 'cors',
          body: JSON.stringify({url: this.originalLink})
        });
      } catch (e) {
        alert(e.message)
        this.processing = false
        return
      }

      this.processing = false

      if (response.status !== 200) {
        return
      }

      console.log(response)

      const json = await response.json()

      console.log(json)

      this.shortLink = json.result
      this.originalLink = ''
      this.shortened = true
    },

    shortenAgain() {
      this.shortened = false
    },
  }
}
</script>

<style scoped>
.container {
  height: 100%;
}

.content {
  width: 600px;
}

.center-vertically {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
