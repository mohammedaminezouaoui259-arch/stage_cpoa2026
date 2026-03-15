import { router } from "@inertiajs/react";

export default function EditCourrier({ id }) {

return (

<div className="p-10">

<h1 className="text-3xl font-bold mb-5">
Modifier Courrier {id}
</h1>

<button
onClick={()=>router.visit("/courriers")}
className="bg-gray-600 text-white px-4 py-2 rounded"
>
Retour
</button>

</div>

);

}
