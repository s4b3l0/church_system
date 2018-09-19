

var zChar = new Array('  ', '(',  ')', '-   ', '  .');

var idvalue1;
var idvalue2;
var cursorposition;

function ParseForNumber1(object) {
    idvalue1 = ParseChar(object.value, zChar);
}

function ParseForNumber2(object) {
    idvalue2 = ParseChar(object.value, zChar);
}

function backspacerUPs(object, e) {
    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }

    ParseForNumber1(object)

    if (keycode >= 48) {
        ValidatePhone(object)
    }
}

function backspacerDOWNs(object, e) {
    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }
    ParseForNumber2(object)
}

function GetCursorPosition() {

    var t1 = idvalue1;
    var t2 = idvalue2;
    var bool = false
    for (i = 13; i < t1.length; i++) {
        if (t1.substring(i, 1) != t2.substring(i, 1)) {
            if (!bool) {
                cursorposition = i
                bool = true
            }
        }
    }
}

function ValidatePhone(object) {

    var p = idvalue1

    p = p.replace(/[^\d]*/gi, "")


}


var clipboard = new Clipboard('.btn');

clipboard.on('success', function(e) {
    console.log(e);
});

clipboard.on('error', function(e) {
    console.log(e);
});