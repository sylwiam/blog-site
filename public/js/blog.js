Vue.http.headers.common['X-CSRF-TOKEN'] = $('#csrf-token').attr('value');
new Vue({
	el: '#guestbook',
	data: {
		name2: 'Test',
		newMessage: { author: '', comment: ''},
		formNotFilled: false,
		submitted: false
	},
	ready : function() {       
		console.log('vueModel is ready');		   
		this.fetchMessages();

		console.log('after fetchMessages');
    	console.log(this.messages);
    },
	computed: {
		formNotFilled: function() {
			for (var key in this.newMessage) {
				if (! this.newMessage[key]) return true;
			}
			return false;
		}
	},
	methods: {
		fetchMessages: function () {
			console.log('fetchMessages');

			$.ajax({
				url: 'api/messages',
				type: 'get',
				async: false,
				success: function(responseData) {
					temp = responseData;
				},
				error: function (request, status, error) {
					// alert(request.responseText);
				}
			});

			if (typeof temp !== 'undefined') {
				this.$set('messages', temp);
			}

		},
		addComment: function(e) {
			e.preventDefault();
			inputData = this.newMessage;
			console.log('inputData:');
			console.log(inputData);

			// jQuery ajax
			$.ajax({
				url: 'api/messages/create',
				type: 'post',
				data: inputData,
				async: false,
				success: function(responseData) {
					// 
				}
			});
			
			// Vue http
			this.$http.post('api/messages/create', inputData).then((response) => {
				console.log('vue http sucess');
			}, (response) => {
				console.log('vue http error');
			});

			this.messages.push(this.newMessage);
			this.newMessage = { author: '', comment: ''};
			this.submitted = true;
		}
	}
})
