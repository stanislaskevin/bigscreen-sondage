import axios from 'axios'

export default {
    login(form) {
        return axios.post('http://127.0.0.1:8000/api/login',form).then((r) => sendActionResult(r))
    },

    new(sondage) {
        return axios.post('http://127.0.0.1:8000/api/sondage', sondage).then((r) => sendActionResult(r))
    },

    sondages() {
        return axios.get('http://127.0.0.1:8000/api/sondage/reponses')
    },

    reponse(reponse) {
        return axios.get(`http://127.0.0.1:8000/api/sondage/reponses/${reponse.id}`)
    },

    graph() {
        return axios.get('http://127.0.0.1:8000/api/sondage/reponses')
    }
}

const sendActionResult = (r) => {
	if (r.statusText == 'OK' && r.data.done == true) {
		return r.data;
	} else {
		return { done: false };
	}
};