<?php

/*

This file is part of Mustard.

Mustard is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Mustard is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mustard.  If not, see <http://www.gnu.org/licenses/>.

*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MustardFeedbackTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_feedback', function (Blueprint $table) {
            $table->integer('user_feedback_id', true)->unsigned();
            $table->integer('purchase_id')->unsigned();
            $table->integer('subject_user_id')->unsigned();
            $table->integer('rater_user_id')->unsigned();
            $table->tinyInteger('rating');
            $table->string('message', 128);
            $table->integer('placed')->unsigned();

            $table->foreign('purchase_id')->references('purchase_id')->on('purchases');
            $table->foreign('subject_user_id')->references('user_id')->on('users');
            $table->foreign('rater_user_id')->references('user_id')->on('users');
            $table->unique(['purchase_id', 'subject_user_id']);
            $table->unique(['purchase_id', 'rater_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_feedback');
    }
}
