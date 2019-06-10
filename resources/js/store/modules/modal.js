const state = {
    message: '',
    type: 'success',
    showModal: false,
};
 
const mutations = {
    setAlert (state, {message, type}) {
        state.message = message;
        state.type = type || 'success';
    },
    toggleShow(state) {
        state.showModal = !state.showModal
    }
};
 
export default {
    namespaced: true,
    state,
    mutations
};