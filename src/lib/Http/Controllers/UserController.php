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

namespace Hamjoint\Mustard\Feedback\Http\Controllers;

use Hamjoint\Mustard\Http\Controllers\Controller;
use Hamjoint\Mustard\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return the user feedback view.
     *
     * @return \Illuminate\View\View
     */
    public function showFeedback(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        switch ($request->input('type')) {
            case 'positive':
                $feedbacks = $user->feedbackReceived()->positive()->paginate();

                break;
            case 'neutral':
                $feedbacks = $user->feedbackReceived()->neutral()->paginate();

                break;
            case 'negative':
                $feedbacks = $user->feedbackReceived()->negative()->paginate();

                break;
            default:
                $feedbacks = $user->feedbackReceived()->paginate();
        }

        return view('mustard::user.feedback', [
            'feedbacks' => $feedbacks,
            'user' => $user,
        ]);
    }
}
