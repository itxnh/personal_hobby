<?php
namespace app;
/**
 * app错误码
 */
class AppAPi{
	public static function errorTip($code){
		$array = array(
			#############系统信息##############
			'10000001' => '系统错误，请稍后重试',

			#############系统后台使用##############
			#############1、用户和组相关##############
			'90000001' => '请先登录',
			'90000002' => '管理员不存在',
			'90000003' => '组不存在',
			'90000004' => '该管理员没有权限',
			'90000005' => '请输入账户',
			'90000006' => '请输入正确的账户',
			'90000007' => '请输入密码',
			'90000008' => '管理员不存在',
			'90000009' => '管理员已被禁用',
			'90000010' => '密码不正确',

			'90000011' => '未添加过管理员，请先添加管理员',
			'90000012' => '未添加过管理组，请先添加管理组',

			'90000013' => '请输入真实姓名',
			'90000014' => '请选择管理组',
			'90000015' => '账户已存在，请更换',
			'90000016' => '请输入手机号',
			'90000017' => '请输入部门名称',

			#############2、系统配置相关##############
			'90000100' => '请输入导航名称',
			'90000101' => '请先删除子导航',


			#############公用##############
			'91000001' => '添加失败',
			'91000002' => '修改失败',
			'91000003' => '删除失败',
			'91000004' => '未改变数据',
			'91000005' => '未查询到数据',
			'91000006' => '失败',
            '91000007' => '审核失败',
		);
		return $array[$code];
	}
}