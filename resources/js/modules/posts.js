const state = {
    posts: [],
    categorys: []
};
const getters = {
    posts: (state) => {
        return state.posts
    },
    categorys: (state) => {
        return state.categorys
    }
}
const mutations = {
    posts: (state, posts) => {
        state.posts = posts
    },
    categorys: (state, categorys) => {

        state.categorys = categorys
        // console.log(state.categorys);
    }
}
const actions = {
    categorys: function (context) {
        if (context.state.posts.length == 0)
            axios.get('/api/getcategorys')
                .then(res => {

                    context.commit('categorys', res.data.categorys)
                })


                .catch(err => console.log(err))
    },
    posts: function (context) {
        // console.log("commit");

        if (context.state.posts.length == 0)
            axios.get('/api/getposts')
                .then(res => {
                    // console.log("anas posts", res);

                    context.commit('posts', res.data.posts)
                })


                .catch(err => console.log(err))
    }
}
export default {
    state,
    getters,
    mutations,
    actions
}