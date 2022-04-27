*/
    public function update(Request $request, User $user)
    {
        $request->validate([
            'type' => '',
            'role_id' => '',
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required',
            'password',
            'remove',
            'change',
        ]);

        // GLOBAL VARIABLE


        if($request->type){

            return "hello";
        }

        if ($files = $request->file('image')) {

            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            // If password  change
            if ($request->has('password-change')) {
                $data = [
                    'role_id' => $request->input('role_id'),
                    'image' => $profileImage,
                    'email' => $request->input('email'),
                    'password' => Hash::make($request['password'])
                ];


                $user->update($data);
                $notification = array(
                    'message' => 'El usuario se actualizo con exito.',
                    'alert-type' => 'success'
                );


                return back()->with($notification);
            }




            $data = [
                'role_id' => $request->input('role_id'),
                'image' => $profileImage,
                'email' => $request->input('email'),
            ];
            $user->update($data);
            $notification = array(
                'message' => 'El usuario se actualizo con exito.',
                'alert-type' => 'success'
            );


            return back()->with($notification);
        } else {

            if ($request->has('password-change')) {
                $data = [
                    'role_id' => $request->input('role_id'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request['password'])
                ];


                $user->update($data);
                $notification = array(
                    'message' => 'El usuario se actualizo con exito.',
                    'alert-type' => 'success'
                );


                return back()->with($notification);
            }


            if ($remove = $request->has('remove')) {

                if ($request->has('password-change')) {
                    $data = [
                        'role_id' => $request->input('role_id'),
                        'image' => "",
                        'email' => $request->input('email'),
                        'password' => Hash::make($request['password'])
                    ];


                    $user->update($data);
                    $notification = array(
                        'message' => 'El usuario se actualizo con exito.',
                        'alert-type' => 'success'
                    );


                    return back()->with($notification);
                }





                $data = [
                    'role_id' => $request->input('role_id'),
                    'image' => "",
                    'email' => $request->input('email'),
                ];
                $user->update($data);
                $notification = array(
                    'message' => 'El usuario se actualizo con exito.',
                    'alert-type' => 'success'
                );


                return back()->with($notification);
            }

            $data = [
                'role_id' => $request->input('role_id'),
                'email' => $request->input('email'),
            ];
            $user->update($data);
            $notification = array(
                'message' => 'El usuario se actualizo con exito.',
                'alert-type' => 'success'
            );


            return back()->with($notification);
        }
    }