<?php

namespace common\models\traitsHelpers;

/**
 * Description of unixTime
 * this class to convert created_at and updated_at in formatted time
 * @author abdallah alkhwaldah
 */
trait unixTime
{

    public function traitsConstruct()
    {
        $this->createdByTable = Admins::className();
    }

    /**
     * @return  mixed Formatted Date String , null
     */
    public function getCreatedAtFormattedDateString()
    {
        return gmdate("Y-m-d H:i", $this->created_at);
    }

    /**
     * @return  mixed Formatted Date String , null
     */
    public function getUpdatedAtFormattedDateString()
    {
        return ((gmdate("Y-m-d H:i", $this->updated_at) == gmdate("Y-m-d H:i", $this->created_at)) || ($this->updated_at == null)) ? 'never' : gmdate("Y-m-d H:i", $this->updated_at);
    }
}
