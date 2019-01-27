const state = {
    sliders: []
};
const getters = {
    sliders: (state) => {
        return state.sliders
    }
}
const mutations = {
    loadsliders: (state, sliders) => {
        state.sliders = sliders
    }
}
const actions = {
    loadsliders: (context) => {
        if (context.state.sliders.length == 0)
            axios.get("api/sliders").then(res => {

                context.commit("loadsliders", res.data.sliders)
            }).catch(err => {
                console.log(err);
            });
    }
}
export default {
    state,
    getters,
    mutations,
    actions
}