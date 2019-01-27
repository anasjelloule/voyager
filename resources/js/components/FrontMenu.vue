<template>
  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <router-link
      class="nav-item"
      tag="li"
      exact
      active-class="active"
      :to="{name:'acceuil'}"
      v-if="acceuil"
    >
      <a class="nav-link">{{acceuil}}</a>
    </router-link>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        data-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="true"
        aria-expanded="false"
      >Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#tab2Id">Action</a>
        <a class="dropdown-item" href="#tab3Id">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#tab4Id">Action</a>
        <router-link class="dropdown-item" active-class="active" :to="{name:'about',}">About</router-link>
      </div>
    </li>
    <router-link
      class="nav-item"
      tag="li"
      active-class="active"
      :to="{name:'about',hash:'#vision'}"
    >
      <a class="nav-link">About</a>
    </router-link>
    <router-link class="nav-item" tag="li" active-class="active" :to="{name:'anas',}">
      <a class="nav-link">Anas</a>
    </router-link>
    <router-link class="nav-item" tag="li" active-class="active" :to="{name:'blog',}">
      <a class="nav-link">Blog</a>
    </router-link>
  </ul>
</template>
<script>
export default {
  name: "front-menu",
  data() {
    return {
      menusitem: []
    };
  },
  computed: {
    // menusitems: function() {
    //   return this.menusitem.filter(el => el.title != "acceuil");
    // },
    acceuil: function() {
      return "Acceuil";
      // return this.menusitem.find(el => el.title == "acceuil");
    }
  },
  mounted() {
    // const vm = this;
    // axios.get("api/menus").then(res => {
    //   vm.menusitem = res.data.menus;
    // });
  }
};
</script>
