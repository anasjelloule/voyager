<template>
  <div v-if="posts" class="container">
    <div class="row">
      <transition name="slide" mode="out-in">
        <div class="col-md-9 card-deck">
          <div class="col-md-4 my-3" v-for="(post,index) in filterposts" :key="index">
            <router-link :to="{name:'singlepost',params:{slug:post.slug}}">
              <div class="card">
                <img class="card-img-top" :src="'storage/'+post.image" :alt="post.title">
                <div class="card-body">
                  <h4 class="card-title">{{post.title}}</h4>
                  <p class="card-text">{{post.excerpt}}</p>
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </transition>
      <div class="col-md-3">
        <ul class="list-group">
          <li
            v-for="(category,index) in categorys"
            :key="index"
            class="list-group-item d-flex justify-content-between align-items-center"
          >
            <a class="w-100" @click.prevent="filter_cat=category.id" href="#">
              {{category.name}}
              <span
                class="badge badge-secondary badge-pill float-right"
              >{{countposts(category.id)}}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "blog",
  data() {
    return {
      slug: "blog",
      filter_cat: 0
    };
  },
  methods: {
    countposts: function(id) {
      if (this.$store.getters.posts)
        // return this.$store.getters.posts;
        return this.$store.getters.posts.filter(el => {
          return el.category_id == id;
        }).length;
    }
  },
  computed: {
    posts: function() {
      return this.$store.getters.posts;
    },
    filterposts: function() {
      const vm = this;
      if (this.filter_cat == 0) return this.$store.getters.posts;
      if (this.filter_cat != 0)
        return this.$store.getters.posts.filter(el => {
          return el.category_id == vm.filter_cat;
        });
    },
    categorys: function() {
      return this.$store.getters.categorys;
    }
  },

  created() {
    // if (this.$store.getters.page.length == 0)
    this.$store.dispatch("posts");
    this.$store.dispatch("categorys");

    if (this.$store.getters.posts)
      document.head.querySelector('meta[name="keyword"]').content =
        "anas key25";
  }
};
</script>

