<template>
  <div>
    <h1 class="font-normal text-3xl leading-none mb-8">
      Laravel Stats
    </h1>

    <ul>
      <li><strong>Total Series:</strong> {{ series }} </li>
      <li><strong>Total Lesson:</strong> {{ lessons }} </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      series: 0,
      lessons: 0
    }
  },

  mounted() {
    axios.get('/site-stats').then(({ data }) => {
      this.series = data.series;
      this.lessons = data.lessons;
    });
  }
}
</script>
