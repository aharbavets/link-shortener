<template>
  <div class="container center-vertically" id="container">

    <div class="content">
      <h1 class="display-4">Link Shortener</h1>

      <form v-if="!shortened" @submit.stop="shorten">
        <div class="form-group" >
          <label for="original_link">Enter your long link here</label>
          <div class="input-group mb-3">
            <input required type="url" class="form-control" v-model="originalLink"  id="original_link" aria-describedby="original_link" placeholder="Your link">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">Shorten</button>
            </div>
          </div>
        </div>
      </form>

      <div v-if="shortened">
        <div class="alert alert-success" role="alert">
          Your link has been shortened:
        </div>

        <div class="input-group mb-3">
          <input readonly type="url" class="form-control" aria-describedby="original_link">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Copy</button>
          </div>
        </div>

        <button type="button" class="btn btn-light" @click="shortenAgain">Shorten another link</button>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'LinkShortener',
  props: {
  },
  data() {
    return {
      shortened: false,
      originalLink: ''
    }
  },
  methods: {
    shorten() {
      // todo actually shorten the link

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
