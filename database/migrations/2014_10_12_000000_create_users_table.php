<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //氏名
            $table->string('employee_num', 4)->unique(); //社員番号
            $table->string('age'); //年齢
            $table->unsignedInteger('role_id')->default(\App\Models\User::ROLE_MEMBER); //役職(id)
            $table->string('postal'); //郵便番号
            $table->string('address'); //住所
            $table->string('phone'); //電話番号
            $table->string('email')->unique(); //メールアドレス
            $table->string('password'); //パスワード
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(['id' => 1, 'name' => 'テスト太郎', 'employee_num' => '0001', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test1@example.com', 'password' => bcrypt('password'), 'role_id' => 1]);
        DB::table('users')->insert(['id' => 2, 'name' => 'テスト二郎', 'employee_num' => '0002', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test2@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 3, 'name' => 'テスト三郎', 'employee_num' => '0003', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test3@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 4, 'name' => 'テスト四郎', 'employee_num' => '0004', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test4@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 5, 'name' => 'テスト五郎', 'employee_num' => '0005', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test5@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 6, 'name' => 'テスト六郎', 'employee_num' => '0006', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test6@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 7, 'name' => 'テスト七郎', 'employee_num' => '0007', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test7@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 8, 'name' => 'テスト八郎', 'employee_num' => '0008', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test8@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 9, 'name' => 'テスト九郎', 'employee_num' => '0009', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test9@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 10, 'name' => 'テスト十郎', 'employee_num' => '0010', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test10@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 11, 'name' => 'テスト11', 'employee_num' => '0011', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test11@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 12, 'name' => 'テスト12', 'employee_num' => '0012', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test12@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 13, 'name' => 'テスト13', 'employee_num' => '0013', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test13@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 14, 'name' => 'テスト14', 'employee_num' => '0014', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test14@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 15, 'name' => 'テスト15', 'employee_num' => '0015', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test15@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 16, 'name' => 'テスト16', 'employee_num' => '0016', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test16@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 17, 'name' => 'テスト17', 'employee_num' => '0017', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test17@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 18, 'name' => 'テスト18', 'employee_num' => '0018', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test18@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 19, 'name' => 'テスト19', 'employee_num' => '0019', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test19@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 20, 'name' => 'テスト20', 'employee_num' => '0020', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test20@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 21, 'name' => 'テスト21', 'employee_num' => '0021', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test21@example.com', 'password' => bcrypt('password'), 'role_id' => 1]);
        DB::table('users')->insert(['id' => 22, 'name' => 'テスト22', 'employee_num' => '0022', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test22@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 23, 'name' => 'テスト23', 'employee_num' => '0023', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test23@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 24, 'name' => 'テスト24', 'employee_num' => '0024', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test24@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 25, 'name' => 'テスト25', 'employee_num' => '0025', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test25@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 26, 'name' => 'テスト26', 'employee_num' => '0026', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test26@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 27, 'name' => 'テスト27', 'employee_num' => '0027', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test27@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 28, 'name' => 'テスト28', 'employee_num' => '0028', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test28@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 29, 'name' => 'テスト29', 'employee_num' => '0029', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test29@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 30, 'name' => 'テスト30', 'employee_num' => '0030', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test30@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);
        DB::table('users')->insert(['id' => 31, 'name' => 'テスト31', 'employee_num' => '0031', 'age' => '40', 'postal' => '123-4567', 'address' => '東京都テスト区テスト1-2-3', 'phone' => '080-1234-5678', 'email' => 'test31@example.com', 'password' => bcrypt('password'), 'role_id' => 2]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
