let actions = {
    SEARCH_POSTS({commit}, query) {
        let params = {
            query
        };
        axios.get(`/api/search`, {params})
            .then(res => {
                if (res.data === 'ok')
                    console.log('request sent successfully')

            }).catch(err => {
            console.log(err)
        })
    },
    GET_POSTS({commit}) {
        axios.get('/api/posts')
            .then(res => {
                {
                    commit('SET_POSTS', res.data)
                }
            })
            .catch(err => {
                console.log(err)
            })
    }
}

export default actions
