<template>
  <div v-if="post" class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{post.title}}</h1>
        <img :src="'/storage/'+post.image" :alt="post.title">
        <div v-html="post.body"></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "single",
  data() {
    return {
      title: "single"
    };
  },
  props: ["slug"],
  methods: {},
  computed: {
    post: function() {
      //   window.page = this.$store.getters.posts;
      //   if (window.page)
      //   return "anas";
      return this.$store.getters.posts.find(el => {
        // console.log("id", el.id);
        // console.log("lg id", this.id);

        return el.slug == this.slug;
      });
    }
  },

  created() {
    // if (this.$store.getters.page.length == 0)
    this.$store.dispatch("posts");
    console.log("categorys");

    if (this.$store.getters.posts)
      document.head.querySelector('meta[name="keyword"]').content =
        "single postx";
  }
};
</script>

