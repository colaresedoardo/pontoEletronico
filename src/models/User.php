<?php
class User extends Model{
    protected static $columns=[
        'id','name',
        'password','email',
        'start_date','end_date','is_admin'];
}
