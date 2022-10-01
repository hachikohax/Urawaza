window._ = require('lodash');

/**
 * Going to load axios HTTP library to issue requests to
 * laravel backend. Library automatically handles sending
 * the CSRF token as a header based on the value of the 
 * "XSRF" token cookie
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/** 
 * Echo for event broadcasting
 * ((COME BACK TO THIS))
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo ({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });