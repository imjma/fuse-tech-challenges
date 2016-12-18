<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Salmat Challenge 2</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
    <div id="app">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="twt-wrapper">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Twitter Feed
                        </div>
                        <div class="panel-body">

                            <input v-model="keyword" class="form-control">
                            <p>{{ message }}</p>

                            <ul class="media-list" v-for="tweet in tweets" :key="tweet.id">
                                <li class="media">
                                    <div class="pull-left">
                                        <img :src="tweet.user.profile_image_url" alt="" class="img-circle">
                                    </div>
                                    <div class="media-body">
                                        <span class="text-muted pull-right">
                                            <time class="text-muted" :datetime="tweet.created_at">{{ tweet.created_at | readableDateTime }}</time>
                                        </span>
                                        <strong class="text-success">@ {{ tweet.user.screen_name }}</strong>
                                        <p>
                                            {{ tweet.text }}
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- vuejs.org -->
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/jquery@3.1.1/dist/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<script src="https://unpkg.com/axios@0.15.3/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.17.2/lodash.min.js"></script>
<script src="https://unpkg.com/moment@2.17.1/min/moment.min.js"></script>

<!-- custom js -->
<script src="/assets/search.js"></script>
</body>
</html>