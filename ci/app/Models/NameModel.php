<!-- 
    
//< ?   php 
//namespace App\Models;
use CodeIgniter\Model;

class NameModel extends Model
{
    protected $table = 'names';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email','password'];
    protected $beforeInsert = ['hashPassword'];
    
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            
            unset($data['data']['password']);
            
        }
        
        return $data;
    }
}
-->