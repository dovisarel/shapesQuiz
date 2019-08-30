<template>
  <div>
    <div class="row">
      <span>Guess the extent</span>
      <input v-model.number="answer" @keypress.enter="sendAnswer">
      <button @click="sendAnswer">Guess</button>
    </div>

    <div class="wrap-img">
      <component v-if="shape" :is="shape.component" :data="shape.data"></component>
    </div>

    <pre class="debug-data">{{ shape }}</pre>
  </div>
</template>

<script>
import ShapeSquare from "./ShapeSquare.vue";
import ShapeRectangle from "./ShapeRectangle.vue";
import ShapeCircle from "./ShapeCircle.vue";

export default {
  components: {
    ShapeSquare,
    ShapeRectangle,
    ShapeCircle
  },
  data() {
    return {
      shape: null,
      answer: ""
    };
  },
  async mounted() {
    await this.getNewQuestion();
  },
  methods: {
    async getNewQuestion() {
      try {
        const res = await axios.get("/api/shapes/get");

        this.shape = res.data;
      } catch (error) {
        console.warn(error);
      }
    },
    async sendAnswer() {
      try {
        const res = await axios.post("/api/shapes/test", {
          shape: this.shape,
          answer: this.answer
        });

        const data = res.data;

        if (data.isCurrect) {
          alert("Currect!");

          await this.getNewQuestion();
        } else {
          alert("NOT Currect!" + "\n\n" + "Try again");
        }
      } catch (error) {
        alert("Error,\n\nsee detail in console.");
        console.error(error);
      }
    }
  }
};
</script>

<style scoped>
.row {
  display: flex;
}
.wrap-img {
  width: 320px;
  height: 320px;
  border: 1px solid #ddd;
}
.debug-data {
  background: yellow;
}
</style>
