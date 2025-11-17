<template>
  <div>
    <h1 class="font-normal text-3xl leading-none mb-8">Your Stats</h1>

    <input
      v-model.trim="token"
      type="text"
      placeholder="Enter your token"
      class="border p-2 rounded-sm"
      @keyup.enter="submitToken"
    />

    <ul v-if="stats.length" class="mt-4">
      <li v-for="(stat, index) in stats" :key="index">
        {{ stat.name }}: {{ stat.value }}
      </li>
    </ul>

    <p v-if="error" class="text-red-500 mt-4 italic">{{ error }}</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "Stats",
  data() {
    return {
      token: '',
      stats: [],
      error: null,
      loading: false
    };
  },
  methods: {
    async submitToken() {
      if (!this.token) {
        this.stats = [];
        this.error = "Token cannot be empty.";
        return;
      }

      this.stats = [];
      this.error = null;

      try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const response = await axios.post('/stats', { token: this.token }, {
          headers: { 'X-CSRF-TOKEN': csrfToken }
        });

        if (response.data.success) {
          this.stats = response.data.stats;
        }
      } catch (err) {
          this.error = "Unauthenticated.";
      }
    }
  }
};

</script>

<style scoped>
input {
  width: 300px;
}
</style>
