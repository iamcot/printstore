/*
 * jQuery FriendURL plugin 1.7
 *
 * http://www.bulgaria-web-developers.com/projects/javascript/friendurl/
 *
 * Copyright (c) 2009-2012 Dimitar Ivanov
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 * 
 * Bugfixed by: Vitaliy Stepanenko (http://nayjest.ru)    
 */
(function ($, undefined) {
	
	var cyrillic = [
		"a","á","à","ả","ã","ạ", "A","Á","À","Ả","Ã","Ạ",
		"ă","ắ","ằ","ẳ","ẵ","ặ", "Ă","Ắ","Ằ","Ẳ","Ã","Ặ",
		"â","ấ","ầ","ẩ","ẫ","ậ", "Â","Ấ","Ầ","Ẩ","Ẫ","Ậ",
		"e","é","è","ẻ","ẽ","ẹ", "E","É","È","Ẻ","Ẽ","Ẹ",
		"ê","ế","ề","ể","ễ","ệ", "Ê","Ế","Ề","Ể","Ễ","Ệ",
		"i","í","ì","ỉ","ĩ","ị", "I","Í","Ì","Ỉ","Ĩ","Ị",
		"o","ó","ò","ỏ","õ","ọ", "O","Ó","Ò","Ỏ","Õ","Ọ",
		"ô","ố","ồ","ổ","ỗ","ộ", "Ô","Ố","Ồ","Ổ","Ỗ","Ộ",
		"ơ","ớ","ờ","ở","ỡ","ợ", "Ơ","Ớ","Ờ","Ở","Ỡ","Ợ",
		"u","ú","ù","ủ","ũ","ụ", "U","Ú","Ù","Ủ","Ũ","Ụ",
        "ư","ứ","ừ","ử","ữ","ự", "Ư","Ứ","Ừ","Ử","Ữ","Ự",
        "y","ý","ỳ","ỷ","ỹ","ỵ", "Y","Ý","Ỳ","Ỷ","Ỹ","Ỵ",
		"đ","Đ"
	];

	var latin = [
        "a","a","a","a","a","a","a","a","a","a","a","a",
        "a","a","a","a","a","a","a","a","a","a","a","a",
        "a","a","a","a","a","a","a","a","a","a","a","a",
        "e","e","e","e","e","e","e","e","e","e","e","e",
        "e","e","e","e","e","e","e","e","e","e","e","e",
        "i","i","i","i","i","i","i","i","i","i","i","i",
        "o","o","o","o","o","o","o","o","o","o","o","o",
        "o","o","o","o","o","o","o","o","o","o","o","o",
        "o","o","o","o","o","o","o","o","o","o","o","o",
        "u","u","u","u","u","u","u","u","u","u","u","u",
        "u","u","u","u","u","u","u","u","u","u","u","u",
        "y","y","y","y","y","y","y","y","y","y","y","y",
        "d","d"
    ];
	
	var string = '';
	
	function convert (text) {
		string = str_replace(cyrillic, latin, text);
		return string;
	}
		
	function str_replace (search, replace, subject, count) {
	    // http://kevin.vanzonneveld.net
	    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +   improved by: Gabriel Paderni
	    // +   improved by: Philip Peterson
	    // +   improved by: Simon Willison (http://simonwillison.net)
	    // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
	    // +   bugfixed by: Anton Ongson
	    // +      input by: Onno Marsman
	    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +    tweaked by: Onno Marsman
	    // +      input by: Brett Zamir (http://brett-zamir.me)
	    // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +   input by: Oleg Eremeev
	    // +   improved by: Brett Zamir (http://brett-zamir.me)
	    // +   bugfixed by: Oleg Eremeev
	    // %          note 1: The count parameter must be passed as a string in order
	    // %          note 1:  to find a global variable in which the result will be given
	    // *     example 1: str_replace(' ', '.', 'Kevin van Zonneveld');
	    // *     returns 1: 'Kevin.van.Zonneveld'
	    // *     example 2: str_replace(['{name}', 'l'], ['hello', 'm'], '{name}, lars');
	    // *     returns 2: 'hemmo, mars'
	
	    var i = 0, j = 0, temp = '', repl = '', sl = 0, fl = 0,
	            f = [].concat(search),
	            r = [].concat(replace),
	            s = subject,
	            ra = r instanceof Array, sa = s instanceof Array;
	    s = [].concat(s);
	    if (count) {
	        this.window[count] = 0;
	    }
	
	    for (i=0, sl=s.length; i < sl; i++) {
	        if (s[i] === '') {
	            continue;
	        }
	        for (j=0, fl=f.length; j < fl; j++) {
	            temp = s[i]+'';
	            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
	            s[i] = (temp).split(f[j]).join(repl);
	            if (count && s[i] !== temp) {
	                this.window[count] += (temp.length-s[i].length)/f[j].length;}
	        }
	    }
	    return sa ? s : s[0];
	}
	
	function Friendurl () {
		this.defaults = {
			divider : '-',
			transliterate: true
		};
	}
	
	Friendurl.prototype = {
		_initFriendurl: function (target, options) {
			var self = this;
			$(target).keyup(function () {
				options = $.extend(self.defaults, options);

				var url = $(this).val();
				
				if (options.transliterate) {
    				url = convert(url);
    			}

				url = url
    				.toLowerCase() // change everything to lowercase
    				.replace(/^\s+|\s+$/g, "") // trim leading and trailing spaces		
    				.replace(/[_|\s]+/g, "-") // change all spaces and underscores to a hyphen
    				.replace(/[^a-z\u0400-\u04FF0-9-]+/g, "") // remove all non-cyrillic, non-numeric characters except the hyphen
    				.replace(/[-]+/g, "-") // replace multiple instances of the hyphen with a single instance
    				.replace(/^-+|-+$/g, "") // trim leading and trailing hyphens
    				.replace(/[-]+/g, options.divider)				
    			;
    			
    			var $el = $('#' + options.id);

    			if ($el.length > 0) {
    				var nodeName = $el.get(0).tagName;
    				switch (nodeName) {
    					case 'INPUT':
    						$el.val(url);
    						break;
    					default:
    						$el.text(url);
    				}
    			}
			});
		}
	};
	
	$.friendurl = new Friendurl();
	$.friendurl.version = "1.7";
	
	$.fn.friendurl = function (options) {	
		return this.each(function () {
			$.friendurl._initFriendurl(this, options);
		});
	};
})(jQuery);