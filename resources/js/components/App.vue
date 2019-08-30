<template>
  <div class="container">
    <Question/>
    <Question/>
  </div>
</template>

<script>
import Question from "./Question.vue";

export default {
  components: {
    Question
  }
};
</script>

<style scoped>
.container {
  display: flex;
  justify-content: space-around;
  max-width: 1024px;
  margin: 0 auto;
  padding: 15vh 0;
}
</style>
