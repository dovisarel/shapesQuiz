<template>
  <svg width="300" height="300">
    <rect
      :width="data.x"
      :height="data.y"
      :x="(300 - data.x) / 2"
      :y="(300 - data.y) / 2"
      style="stroke-width: 2; stroke: #000; fill: transparent;"
    ></rect>
  </svg>
</template>

<script>
export default {
  props: ["data"]
};
</script>
