import Axios from "axios";

const RequestManager = Axios.create({
    baseURL: 'http://localhost:1199/v1'
});
