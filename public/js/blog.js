
// console.log('hello');
// 
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
	// filters: {
	// 	orderBy: function(){

	// 	}
	// },
	computed: {
		formNotFilled: function() {
			for (var key in this.newMessage) {
				if (! this.newMessage[key]) return true;
			}
			return false;
		}
	},
	methods: {
		// fetchMessages: function() {
  //       	console.log('fetchMessages()');
  //       	inputData = { name: 'my name', message: 'my message' };
  //       	this.$http.get('api/messages', inputData, function(response) {
  //       		console.log('response');
  //       		console.log(response);
  //       		this.$set('messages', response);
  //       	});
  //       	console.log('messages after');
  //       	console.log(this.messages);
		// }
		fetchMessages: function () {
            console.log('fetchMessages');
            // this.$http.get('api/messages', function (responseData) {
            // 	console.log('responseData:');
            // 	console.log(responseData);
            //     temp = responseData;
            // });

        	$.ajax({
		        url: 'api/messages',
		        type: 'get',
		        async: false,
		        success: function(responseData) {
		        	// console.log('responseData:');
           //  		console.log(responseData);
            		temp = responseData;
		        }
			});
            this.$set('messages', temp);

        },
        addComment: function(e) {
        	e.preventDefault();
        	this.messages.push(this.newMessage);
        	inputData = this.newMessage;
        	$.ajax({
		        url: 'api/messages/create',
		        inputData,
		        type: 'post',
		        async: false,
		        success: function(responseData) {
		        	// console.log('responseData:');
           //  		console.log(responseData);
            		temp = responseData;
		        }
			});
        	this.newMessage = { author: '', comment: ''};

        	this.submitted = true;
        	
        }
	}
})

// console.log('bye2');