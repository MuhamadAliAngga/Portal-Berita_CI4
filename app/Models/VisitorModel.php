<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitor';
    protected $primaryKey = 'id_visitor';
    protected $allowedFields = ['id_artikel', 'ip_address', 'view_count', 'last_viewed'];

    public function incrementViewCount($id_artikel, $ip_address)
    {
        $startOfDay = date('Y-m-d 00:00:00');
        $endOfDay = date('Y-m-d 23:59:59');

        $view = $this->where(['id_artikel' => $id_artikel, 'ip_address' => $ip_address])
            ->where('last_viewed >=', $startOfDay)
            ->where('last_viewed <=', $endOfDay)
            ->first();

        if ($view) {
            // If the record exists for today, update the last_viewed timestamp
            $this->set('last_viewed', 'CURRENT_TIMESTAMP', false)
                ->where(['id_artikel' => $id_artikel, 'ip_address' => $ip_address])
                ->update();
        } else {
            // If the record doesn't exist for today, insert it
            $this->insert(['id_artikel' => $id_artikel, 'ip_address' => $ip_address]);
        }
    }

    public function getViewCount($id_artikel)
    {
        return $this->where('id_artikel', $id_artikel)
            ->get()->getNumRows();
    }

    public function getTotalViews()
    {
        return $this->get()
            ->getNumRows();
    }

    public function getTotalViewsToday()
    {
        $startDate = '2024-06-20 00:00:00';
        $endDate = '2024-06-20 23:59:59';
        return $this->select('*')
            ->where('last_viewed >=', $startDate)
            ->where('last_viewed <=', $endDate)
            ->get()->getNumRows();;
    }
}
