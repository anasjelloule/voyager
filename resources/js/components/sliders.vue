<template>
  <div :id="id" class="carousel slide container" data-ride="carousel" v-if="sliders">
    <ol class="carousel-indicators">
      <li
        :data-target="'#'+id"
        v-for="(slider,index) in sliders"
        :key="index"
        :data-slide-to="index"
        :class="{active:index==1}"
      ></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div
        class="carousel-item"
        v-for="(slider,index) in sliders"
        :key="index"
        :class="{active:index==1}"
      >
        <img :src="'storage\\'+slider.photo" :alt="slider.titre">
      </div>
    </div>
    <a class="carousel-control-prev" :href="'#'+id" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" :href="'#'+id" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</template>
<script>
export default {
  name: "sliders",
  props: ["id"],
  data() {
    return {};
  },
  computed: {
    sliders: function() {
      return this.$store.getters.sliders;
    }
  },
  created() {
    this.$store.dispatch("loadsliders");
  }
};
</script>
