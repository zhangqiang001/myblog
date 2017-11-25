<?php

namespace backend\modules\system\controllers;

use backend\controllers\BaseController;
use common\libs\http\RequestHelper;
use backend\modules\system\models\SysUser;
use Yii;

class UserController extends BaseController {
	public function actionIndex()
	{
		$data = [
			'addUserUrl' => '/system/user/add-user?type=add',
			'userList'   => SysUser::find()->all()
		];

		return $this->render( 'list', $data );
	}

	public function actionAddUser()
	{
		$userId = RequestHelper::getInt( 'id' );
		$type   = RequestHelper::get( 'type', 'add' );
		if ( $userId ) {
			$userInfo = SysUser::findOne( [ 'id' => $userId ] );
		}

		if ( Yii::$app->request->isPost ) {
			return ( new SysUser() )->addUser( RequestHelper::post() ) ?
				$this->redirect( '/system/user/index' ) :
				$this->redirect( $_SERVER['REQUEST_URI'] );
		}

		return $this->render( 'edit', [
			'user' => isset( $userInfo ) ? $userInfo : null,
			'type' => $type
		] );
	}
}