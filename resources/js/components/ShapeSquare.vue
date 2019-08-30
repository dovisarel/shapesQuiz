<template>
  <svg width="300" height="300">
    <rect
      :width="data.r"
      :height="data.r"
      :x="(300 - data.r) / 2"
      :y="(300 - data.r) / 2"
      style="stroke-width: 2; stroke: #000; fill: transparent;"
    ></rect>
  </svg>
</template>

<script>
export default {
  props: ["data"]
};
</script>
