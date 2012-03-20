<?php

class Docs_Tutorial_Database_Ormapping2_sample extends xFrameworkPX_Model
{
    public function setData($id, $title)
    {
        $this->set(
            array(
                'id' => $id,
                'title' => $title
            )
        );
    }
    
    public function insertData($title)
    {
        // �v���C�}���L�[��ݒ肵�Ȃ��ꍇ�AINSERT�����s����܂��B
        // �v���C�}���L�[��MAX+1���ݒ肳��܂��B
        $this->set(
            array(
                'title' => $title
            )
        );
    }

    public function getDataAll()
    {
        return $this->get('all');
    }

}

