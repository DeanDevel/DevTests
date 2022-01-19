<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="/css/app.css"/>
    <style>
        [v-cloak] {
             display: none !important;
        }
    </style>
</head>
<body class="py-5">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 mx-auto" id="app" v-cloak>
        <contact-component inline-template>
        <div>
        <h4 class="font-weight-semibold mb-4">Send a Message to Us</h4>
            <form class="contact-form"  @submit.prevent="storeContact"  method="post" novalidate="novalidate" @keydown="clearError">
                <div class="contact-form-success alert alert-success mt-4" v-if="success">
                    <strong>Success!</strong> Your message has been sent to us - "for show&tell" redirecting to check all ok.
                </div>

                <div class="contact-form-error alert alert-danger mt-4" v-if="error">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block">@{{errorMessage}}</span>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="text" placeholder="Your Name" value="" maxlength="100" class="form-control" :class="hasError('name') ? 'is-invalid' : ''" name="name" v-model="formData.name">
                        <div v-if="hasError('name')" class="invalid-feedback">
                            @{{getError('name')}}
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="email" placeholder="Your E-mail" value=""  data-msg-email="Please enter a valid email address." :class="hasError('email') ? 'is-invalid' : ''" name="email" maxlength="100" class="form-control" v-model="formData.email">
                        <div v-if="hasError('email')" class="invalid-feedback">
                            @{{getError('email')}}
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <input type="text" placeholder="Gender" value=""  maxlength="100" class="form-control" name="gender" required="" :class="hasError('gender') ? 'is-invalid' : ''" v-model="formData.gender">
                        <div v-if="hasError('gender')" class="invalid-feedback">
                            @{{getError('gender')}}
                        </div>
                   </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <textarea maxlength="5000" placeholder="Content"  rows="5" class="form-control" name="content" required="" :class="hasError('content') ? 'is-invalid' : ''" v-model="formData.content"></textarea>
                        <div v-if="hasError('content')" class="invalid-feedback">
                            @{{getError('content')}}
                        </div>
                     </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                       <input :disabled="hasAnyError" type="submit" value="Send Message"  class="btn btn-primary btn-lg mb-5">
                       
                    </div>
                    <div class="form-group col">
                        <button @click.prevent="reset" class="btn btn-warning btn-lg mb-5">Reset</button>
                    </div>
                    
                </div>
            </form>
        </div>
        </contact-component>
    </div>
    </div>
    </div>
    <script src="/js/app.js"></script>



</body>
</html>





















