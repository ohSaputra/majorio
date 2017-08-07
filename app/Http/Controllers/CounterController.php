<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $this->build_matrix([10, 9, 8 , 7, 6, 5, 4, 3, 2, 1]);

        // build matrix
        $base_matrix = $this->build_matrix( [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] );

        // build supermatrix
        $base_supermatrix = $this->build_supermatrix( $base_matrix );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Test show message

        return 'Hi This is Show Methods';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show test view using test.blade.php
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
     public function show_test ($name, $password) {
         
         return view('test', compact('name', 'password'));

     }

     public function build_matrix( $value = [] ) {

        //  Initialize variabel
        $column = 10;
        $row = 10;
        $elements = 3;
         
        //  Initialize matrix
        $matrix = array();

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            // loop column in matrix
            for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

                // loop the elements in matrix
                for ( $loop_ele = 0; $loop_ele < $elements; $loop_ele++ ) {

                    if ( $loop_row === $loop_column )
                        $matrix[$loop_row][$loop_column][$loop_ele] = 1;

                    else if ( $loop_row < $loop_column ) {

                        $result = $value[ $loop_row ] - $value[ $loop_column ];

                        // negative
                        if ( $result < 0 ) {

                           $result = abs($result);

                            if ( $loop_ele == 0 ) {

                                $min = $result + 2;
                                $matrix_number = ( $min > 9 ) ? 9 : $min; 
                            }

                            else if ( $loop_ele == 1 )
                                $matrix_number = $result;
                                
                            else if ( $loop_ele == 2 ) {

                                $max = $result - 2;
                                $matrix_number = ( $max < 1 ) ? 1 : $max;
                            }

                            $matrix[$loop_row][$loop_column][$loop_ele] = 1 / $matrix_number;

                        } 
                        
                        // positive
                        else {

                            if ( $loop_ele == 0 ) {

                                $min = $result - 2; 
                                $matrix_number = ($min < 1 ) ? 1 : $min;
                            
                            }

                            else if ( $loop_ele == 1 )
                                $matrix_number = $result;

                            else if ( $loop_ele == 2 ) {

                                $max = $result + 2;
                                $matrix_number = ($max > 9 ) ? 9 : $max;
                            
                            }

                            $matrix[$loop_row][$loop_column][$loop_ele] = $matrix_number;

                        }

                    }

                    // inverse
                    else {

                        if ( $loop_ele == 0 )
                            $matrix_number = 1 / $matrix[$loop_column][$loop_row][2]; 

                        else if ( $loop_ele == 1 )
                            $matrix_number = 1 / $matrix[$loop_column][$loop_row][1];

                        else if ( $loop_ele == 2 )
                            $matrix_number = 1 / $matrix[$loop_column][$loop_row][0];

                        $matrix[$loop_row][$loop_column][$loop_ele] = $matrix_number;

                    }
                        

                }

            }

        }

        return $matrix;
     }

     public function build_supermatrix ( $matrix = [] ) {

         //  Initialize variabel
        $column = 10;
        $row = 10;
        $elements = 3;
         
        //  Initialize matrix
        $super_matrix = array();

        // Initialize base matrix
        // Loop the rows in matrix
        for ( $loop_row = 0; $loop_row < $row;  $loop_row++ ) {

            // loop column in matrix
            for ( $loop_column = 0; $loop_column < $column;  $loop_column++ ) {

                $low = $matrix[$loop_row][$loop_column][0];
                $medium = $matrix[$loop_row][$loop_column][1];
                $upper = $matrix[$loop_row][$loop_column][2];

                // deffuzzyfication
                $de_low = ($medium-$low) * 0.5 + $low ;
                $de_upper = $upper - ($upper-$medium) * 0.5;

                $super_matrix[$loop_row][$loop_column] = ( 0.5 * $de_low ) + ( 0.5 * $de_upper ) ;

            }

        }

        return $super_matrix;

     }
}
