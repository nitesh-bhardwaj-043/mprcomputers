//blank line is required
app.controller("ctrl_complaints", function ($scope, $http) {
  $http.get("login/check_valid_session").success(function (data) {
    if (data != 1) {
      window.location.assign('<?=site_url("login")?>');
    }
  });

  $scope.loader = function () {
    $http.get("complaints/view_data").success(function (data) {
      $scope.datadb = data;
    });
  };

  $scope.loader();
  $scope.update_call = function (y) {
    $("#complaintsModal").modal("show");
    $scope.x = y;
    $scope.x.status = y.status == "1";
  };

  $scope.close_modal = function () {
    $("#complaintsModal").modal("hide");
    $scope.filter_new();
  };

  $scope.filter_new = function () {
    $scope.x = {};
  };

  $scope.save_data = function (y) {
    // console.log("save function called");
    // console.log(y);
    $("#form1").ajaxForm({
      type: "POST",
      url: "complaints/save_data",
      beforeSend: function () {
        $("#submitbtn").attr("disabled", true);
        $("#webprogress").css("display", "inline");
      },
      success: function (data) {
        console.log(data);
        if (data == "1") {
          $scope.loader();
          messages(
            "success",
            "Success!",
            "Complaint details Saved Successfully",
            3000
          );
          $scope.filter_new();
          $("#complaintsModal").modal("hide");
        } else if (data == "0") {
          messages("warning", "Info!", "No Data Affected", 3000);
        } else {
          messages("danger", "Warning!", data, 4000);
        }
        $("#webprogress").css("display", "none");
        $("#submitbtn").attr("disabled", false);
      },
    });
  };
  $scope.delete_data = function (c_id) {
    if (
      confirm("Deleting complaints details may hamper your data associated with it.")
    ) {
      if (confirm("Are you Sure to DELETE ??")) {
        $http.get("complaints/delete_data?c_id=" + c_id).success(function (data) {
          console.log(data);
          if (data == "1") {
            messages(
              "success",
              "Success!",
              "Complaint details Deleted Successfully",
              3000
            );
          } else {
            messages("danger", "Warning!", "Complaint details not Deleted", 4000);
          }
          $scope.loader();
        });
      }
    }
  };
});
