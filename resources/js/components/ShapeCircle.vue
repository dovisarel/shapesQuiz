<template>
  <svg width="300" height="300">
    <circle
      cx="150"
      cy="150"
      :r="data.radius"
      style="stroke-width: 2; stroke: #000; fill: transparent;"
    ></circle>
  </svg>
</template>

<script>
export default {
  props: ["data"]
};
</script>
