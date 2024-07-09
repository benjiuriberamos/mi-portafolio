


import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import Button from '@/Components/Button';
import { Head } from '@inertiajs/inertia-react';

export default function Index(props) {
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Cars" />

            <div className="bg-white green v-screen place-items-center">
                <div className="mt-3 mb-3 flex justify-end">
                    <Button>
                        <i className="fa-solid fa-plus-circle"></i>
                        Añadir
                    </Button>
                </div>
            </div>
            <div className="bg-white v-screen place-items-center justify-center flex">
                <table className="table-auto border border-gray-400 ">
                    <thead>
                        <tr className='bg-gray-100 text-red-600'>
                            <th className='px-2 py-2'>#</th>
                            <th className='px-2 py-2'>Marca</th>
                            <th className='px-2 py-2'>Placa</th>
                            <th className='px-2 py-2'>Año</th>
                            <th className='px-2 py-2'>Precio</th>
                            <th className='px-2 py-2'>Color</th>
                            <th className='px-2 py-2'></th>
                            <th className='px-2 py-2'></th>
                        </tr>
                    </thead>
                    <tbody>
                        {props.cars.map((car, i) => (
                            <tr key={car.id}>
                                <td className='border border-gray-400'>{ (i+1) }</td>
                                <td className='border border-gray-400'>{ car.brand.name }</td>
                                <td className='border border-gray-400'>{ car.number_plate }</td>
                                <td className='border border-gray-400'>{ car.year }</td>
                                <td className='border border-gray-400'>{ car.price }</td>
                                <td className='border border-gray-400'>
                                    <i className={'fa-solid fa-car text-'+ car.color + '-600'}></i>
                                </td>
                                <td className='border border-gray-400'>
                                    <Button><i className='fa-solid fa-edit'></i></Button>
                                </td>
                                <td className='border border-gray-400'>
                                    <Button><i className='fa-solid fa-trash'></i></Button>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                    
                </table>
            </div>
        </Authenticated>
    );
}
