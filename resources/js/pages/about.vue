<template>
  <div v-if="page">
    <div class="py-5 text-center">
      <!-- :style="{backgroundImage:'url('+url(page.image)+')'}"> -->
      <h1>{{page.title}}</h1>
      <img height="100" :src="'storage\\'+page.image">
    </div>
    <div v-html="page.body"></div>
  </div>
</template>
<script>
export default {
  name: "about",
  data() {
    return {
      slug: "about"
    };
  },
  methods: {},
  computed: {
    page: function() {
      window.page = this.$store.getters.page[0];

      if (window.page)
        document.head.querySelector('meta[name="keyword"]').content =
          window.page.meta_keywords;
      this.$store.getters.page.find(el => {
        console.log("slug", el.slug);

        return el.slug == this.slug;
      });

      return this.$store.getters.page.find(el => {
        return el.slug == this.slug;
      });
    }
  },
  created() {
    // if (
    //   !this.$store.getters.page.find(el => {
    //     return el.slug === this.slug;
    //   })
    // )
    
    // if (this.$store.getters.page.length == 0)
    this.$store.dispatch("page", { slug: this.slug });
  }
};
</script>

