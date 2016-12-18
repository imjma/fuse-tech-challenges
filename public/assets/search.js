var app = new Vue({
    el: '#app',
    data: {
        keyword: 'engineering',
        message: '',
        tweets: {}
    },
    watch: {
        // whenever keyword changes, this function will run
        keyword: function (newKeyword) {
            this.getTweets(newKeyword)
        }
    },
    methods: {
        getTweets: _.debounce(
            function (keyword) {
                var vm = this
                if (keyword.length == 0) {
                    vm.message = 'Please type any  keywrod'
                    vm.tweets = {}
                    return
                }
                vm.message = 'Fetching...'
                axios.get('/q/' + keyword)
                    .then(function (response) {
                        vm.tweets = response.data.statuses
                        vm.message = ''
                    })
                    .catch(function (error) {
                        vm.message = 'Error! Could not reach the API. ' + error
                    })
            },
            // This is the number of milliseconds we wait for the
            // user to stop typing.
            500
        )
    }
})
//Sun Dec 18 04:13:31 +0000 2016
Vue.filter('readableDateTime', function (value) {
    var now = new moment()
    return moment(value, 'dd MMM DD HH:mm:ss ZZ YYYY', 'en').format('MMMM Do YYYY, h:mm:ss a')
})

app.getTweets(app.keyword)