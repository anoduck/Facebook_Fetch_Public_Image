<?PHP
/**
 * Really simple way to pull users Public Facebook Image and profile info.
 * The data extracted is the data made available by the user.
 * For a deeper dive into Facebook's API visit http://developers.facebook.com/.
 */

Class FacebookFetchClass {
    
    public static $fbUrl = 'http://graph.facebook.com/';
    
    public static function profile_data($user_name){   
        return $profile_array = json_decode(file_get_contents(self::$fbUrl.$user_name), true); 
    }
    
    public static function profile_image($user_name){
        return '<img src="'.self::$fbUrl.$user_name.'/picture'.'">';
    }
    
    
}// END CLASS

$profile_image  = FacebookFetchClass::profile_image('barackobama');
$profile_data   = FacebookFetchClass::profile_data('barackobama');

print '<pre>';
print_r($profile_image);
print '<pre>';

print '<pre>';
print_r($profile_data);
print '<pre>';

?>