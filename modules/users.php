<?php
/**
 * PX User Model
 * File:    users.php
 * Auther:  sunvisor
 * Date:    2011-08-03
 * Copyright (C) Sunvisor 2011 All right reserved.
 **/
class users extends xFrameworkPX_Model
{
    public $usetable = 'users';

    private $_fields = array(
        'name',
        'email',
        'bio'
    );

    /**
     * _getFields 
     * 
     * @param mixed $includeId  idフィールドを含むかどうか 
     * @access private
     * @return array of field names
     */
    private function _getFields($includeId)
    {
        $id = $this->primaryKey;

        if( $includeId ){
            return array_merge(array($id), $this->_fields);
        } else {
            return $this->_fields;
        }
    }

    /**
     * _getValues 
     * 
     * @param mixed $includeId  idフィールドを含むかどうか 
     * @access private
     * @return array of value names (add colon to top of field name)
     */
    private function _getValues($includeId)
    {
        $r = $this->_getFields($includeId);
        return array_map(
            function ($a) {
                return ":$a";
            },
            $r
        );
    }

    /**
     * getAll 
     * 
     * @access public
     * @return all records
     */
    public function getAll() 
    {
        $fields = $this->_getFields(true);
        $r = $this->get(
            'all',
            array(
                'fields' => $fields
            )
        );
        return array(
            'total' => count($r),
            'data' => $r,
            'success' => true
        );        
    }

    public function getHero()
    {
        return 'Thomas';
    }

    /**
     * updateRec 
     * 
     * @param mixed $arg 
     * @access public
     * @return response
     */
    public function updateRec($arg)
    {
        if( is_array($arg) ){
            foreach($arg as $rec){
                $this->_updateOne($rec);
            }
        } else {
            $this->_updateOne($arg);
        }
        
        return array(
            "success" => true,
            "data" => $arg
        );
    }

    /**
     * _updateOne 
     * 
     * @param mixed $arg 
     * @access private
     * @return void
     */
    private function _updateOne($arg)
    {
        $rec = (array)$arg;
        $fields = $this->_getFields(false);
        $id = $this->primaryKey;

        $bind = array();
        foreach($fields as $field){
            $bind[$field] = $rec[$field];
        }

        $param = array(
            'field' => $fields,
            'value' => $this->_getValues(false),
            'bind' => $bind,
            'where' => $id . '=' . $rec[$id]
        );

        $this->update($param);
    }

    /**
     * removeRec 
     * 
     * @param mixed $arg 
     * @access public
     * @return response
     */
    public function removeRec($arg)
    {
        $id = $this->primaryKey;

        $conds = array();
        if( is_array($arg) ){ 
            foreach($arg as $rec){
                $conds[] = $rec->$id;
            }
        } else {
            $conds[] = $arg->$id; 
        }
        $this->remove($conds);
        
        return array(
            "success" => true,
            "data" => $arg
        );
    }

    /**
     * addRec 
     * 
     * @param mixed $arg 
     * @access public
     * @return response
     */
    public function addRec($arg)
    {
        $id = $this->primaryKey;

        if( is_array($arg) ){
            foreach($arg as &$rec){
                $rec->$id = $this->_addOne($rec);
            }
        } else {
            $arg->$id = $this->_addOne($arg);
        }

        return array(
            "success" => true,
            "data" => $arg
        );
    }

    /**
     * _addOne 
     * 
     * @param mixed $arg 
     * @access private
     * @return id of inserted record
     */
    private function _addOne($arg)
    {
        $rec = (array)$arg;

        $param = array(
            'field' => $this->_getFields(true),
            'value' => $this->_getValues(true),
            'bind' => $rec
        );
        $r = $this->insert($param, true);
        $this->insert($param);

        return $this->lastId();
    }

}

