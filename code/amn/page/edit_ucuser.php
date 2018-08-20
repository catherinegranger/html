<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

function isNewPermission($permission_id, $userPermissions) 
{
  $found = FALSE;
  foreach($userPermissions as $userPermission) {
    if ($userPermission['permission_id'] == $permission_id) {
      $found = TRUE;
    }
  }
  return($found);
}


$userId = $two;
$userDetails = fetchUserDetails(NULL, NULL, $userId); 
$userDetails["subscription_status_date_pretty"] = date('m-d-Y', $userDetails["subscription_status_date"]);
$userDetails["subscription_expiration_date_pretty"] = date('m-d-Y', $userDetails["subscription_expiration_date"]);
$userPermissions = fetchUserPermissions($userId);
$allUserPermissions = fetchAllPermissions();
$index=0;
foreach ($userPermissions as $userPermission) {
  $permissions[$index++] = array('id' => $userPermission['id'],
				 'permission_id' => $userPermission['permission_id'],
				 'name' => $userPermission['name']);
}
$index=0;
foreach ($allUserPermissions as $permission) {
  if (isNewPermission($permission['id'], $permissions) == FALSE) {
    $newPermissions[$index] = array('id' => $permission['id'],
				    'name' => $permission['name']);
    $index++;
  }
}
$smarty->assign('user',$userDetails);
$smarty->assign('permissions',$permissions);
$smarty->assign('newPermissions',$newPermissions);

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");


?>