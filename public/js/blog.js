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
			if (temp) this.$set('messages', temp);
        },
        addComment: function(e) {
        	e.preventDefault();
        	this.messages.push(this.newMessage);
        	inputData = this.newMessage;
		    console.log('inputData:');
            console.log(inputData);
        	$.ajax({
		        url: 'api/messages/create',
		        type: 'post',
		        data: inputData,
		        async: false,
		        success: function(responseData) {
            		temp = responseData;
		        }
			});
        	this.newMessage = { author: '', comment: ''};

        	this.submitted = true;
        }
	}
})
