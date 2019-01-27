const state = {
    page: []
};
const getters = {
    page: (state) => {
        // console.log(state.titre);

        return state.page
    }
}
const mutations = {
    page: function (state, page) {
        // state.page = page

        if (state.page.length == 0) {
            state.page = page
        }
        else {
            state.page.push(page[0])
        }
    }
}
const actions = {
    page: function (context, page) {
        // if (context.getters.page.length == 0)
        if (!context.state.page.find(el => {
            return el.slug == page.slug;
        }))
            // var vm = this;
            axios.post('api/page', page)
                .then(res => {
                    // console.log("commit ", vm._vm);

                    context.commit('page', res.data.page)
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