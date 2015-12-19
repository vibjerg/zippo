import './social-stream.scss';
import './jquery.social.stream.wall.1.3.js';

(function ($) {
  var config = {
    feeds: {
      twitter: {
        url: "http://www.copenhagenmarathon.dk/wp-content/plugins/wordpress-social-stream/inc/dcwp_twitter.php?1=O2PQr4Ju73mG5d4zvtQBTLgC4&2=n4iGeaet8lTGzom0KmCq0puy9tgGe6K4POm5DguTk04Tx6tX9S&3=&4=",
        id: "#cphmarathon",
        intro: "Tweeted",
        search: "Tweeted",
        images: "thumb",
        thumb: true,
        retweets: false,
        replies: false,
        out: "intro,text,share"
      },
      facebook: {
        id: "213337230504",
        intro: "Posted",
        comments: 0,
        image_width: 6,
        out: "intro,title,text,user,share",
        text: "content"
      },
      instagram: {
        id: "#cphmarathon",
        intro: "Posted",
        search: "Search",
        out: "intro,thumb,text,user,share,meta",
        accessToken: "",
        redirectUrl: "http://copenhagenmarathon.dk",
        clientId: "04091a2099544df99d95756caff0c35b",
        comments: "0",
        likes: "8"
      }
    },
    remove: "",
    max: "limit",
    days: 10,
    limit: 5,
    speed: 600,
    rotate: {delay: 0, direction: "up"},
    wall: true,
    container: "dcwss",
    cstream: "stream",
    content: "dcwss-content",
    imagePath: "http://www.copenhagenmarathon.dk/wp-content/plugins/wordpress-social-stream/images/dcwss-dark/",
    iconPath: "http://www.copenhagenmarathon.dk/wp-content/plugins/wordpress-social-stream/images/dcwss-dark/"
  };
  if (!jQuery().dcSocialStream) {
    $.getScript("http://www.copenhagenmarathon.dk/wp-content/plugins/wordpress-social-stream/js/jquery.social.stream.wall.1.3.js", function () {
    });
    $.getScript("http://www.copenhagenmarathon.dk/wp-content/plugins/wordpress-social-stream/js/jquery.social.stream.1.5.4.min.js", function () {
      $("#social-stream-18846").dcSocialStream(config);
    });
  } else {
    $("#social-stream-18846.dc-wall").dcSocialStream(config);
  }
})(jQuery);