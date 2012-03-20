<?php

class Docs_Tutorial_Association_bind1_item extends xFrameworkPX_Model
{
    // �v���p�e�B�ł̃A�\�V�G�[�V�����͍s��Ȃ�

    public function test()
    {

        // ���I�A�\�V�G�[�V�����ݒ�
        $this->bind(
            array(
                'hasMany' => array(
                    'tbl_meisai' => array(
                        'order' => array(
                            'tbl_meisai.id'
                        )
                    )
                )
            )
        );

        $ret = $this->get(
            'all',
            array(
                'order' => array(
                    'tbl_item.id'
                )
            )
        );

        // ���I�A�\�V�G�[�V��������
        $this->unbind(
            array(
                'hasMany' => array('tbl_meisai')
            )
        );

        return $ret;
    }

}

