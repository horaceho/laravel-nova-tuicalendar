Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'tuicalendar',
            path: '/tuicalendar',
            component: require('./components/Tool'),
        },
    ])
})
