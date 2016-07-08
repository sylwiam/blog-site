<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script> 
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="{!! asset('css/blog.css') !!}" type="text/css">
        <script type="text/javascript"  src="{{ URL::asset('/vendor/vue/vue.min.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('/vendor/vue/vue-resource.min.js') }}"></script>
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body>
        <div id="guestbook" class="container">
            <h1>@{{ name2 }}</h1>
            <form method="POST" v-on="submit: addComment">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="author">Name:
                        <span class="error" v-if="! newMessage.author">*</span>
                    </label>
                    <input type="text" name="author" id="author" class="form-control" v-model="newMessage.author">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:
                        <span class="error" v-if="! newMessage.comment">*</span>
                    </label>
                    <textarea type="text" name="comment" id="comment" class="form-control" v-model="newMessage.comment"></textarea>
                </div>
                <div class="form-group" v-if="! submitted">
                    <button type="submit" class="btn btn-primary" v-attr="disabled: formNotFilled">Add Message</button>
                </div>
                <div class="alert alert-success" v-if="submitted">Thanks!</div>
            </form>
            <hr>
            <article v-repeat="messages | orderBy comment false">
                <h3>@{{ author }}</h3>
                <div class="body">
                    @{{ comment }}
                </div>
            </article>
        </div>
    </body>
    <script type="text/javascript"  src="{{ URL::asset('js/blog.js') }}"></script>
</html>
