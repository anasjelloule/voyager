<template>
  <sliders :id="'homeslider'"></sliders>
</template>
<script>
import sliders from "../components/sliders";
export default {
  name: "acceuil",
  components: {
    sliders
  },
  data() {
    return {};
  },
  created() {
    this.$store.dispatch("page", { slug: "home" });
  }
};
</script>

