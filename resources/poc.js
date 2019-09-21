jQuery(document).ready(function($) { 
    console.log('Started...');
    console.log('Data received from php, hello value => ' + js_handle.hello );
    console.log('Now we\'re getting dangerous, going to bring that array!');
    console.log('Array contents: ' + dump(js_handle.passed_data));
    console.log('Array contents (json): ' + js_handle.passed_data_json);


function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }
    console.log(out);
}

});